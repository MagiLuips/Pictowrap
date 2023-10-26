<?php
    class SessionController extends Controller {
        private $userSession;
        private $username;
        private $userid;

        private $session;
        private $sites;

        private $user;
 
        function __construct() {
            parent::__construct();

            $this -> init();
        }

        public function getUserSession() {
            return $this -> userSession;
        }

        public function getUsername() {
            return $this -> username;
        }

        public function getUserId() {
            return $this -> userid;
        }

        private function init() {
            $this -> session = new Session();
            $json = $this -> getConfigFile();
            $this -> sites = $json['sites'];
            $this -> defaultSites = $json['default-sites'];

            $this -> validateSession();
        }

        private function getConfigFile() {
            $string = file_get_contents("config/access.json");
            $json = json_decode($string, true);

            return $json;
        }


        function validateSession() {
            error_log('SessionController::validateSession()');

            if ($this -> existsSession()) {
                $role = $this -> getUserSessionData() -> getRole();

                error_log("sessionController::validateSession(): username: " . $this -> user -> getUsername() . ", role: " . $this -> user -> getRole());

                if ($this -> isPublic()) {
                    $this -> redirectDefaultSiteByRole($role);
                    error_log( "SessionController::validateSession() => public page, redirecting..." );
                } else {
                    if ($this -> isAuthorized($role)){
                        error_log( "SessionController::validateSession() => authorized." );
                    } else {
                        error_log( "SessionController::validateSession() => not authorized, redirecting..." );
                        $this -> redirectDefaultSiteByRole($role);
                    }
                }
            } else {
                if ($this -> isPublic()) {
                    error_log('SessionController::validateSession() public page.');
                } else {
                    error_log('SessionController::validateSession() redirecting...');
                    header('location: ' . constant('urlsite') . '');
                }
            }
        }

        function existsSession() {
            if (!$this -> session -> exists()) return false;
            if ($this -> session -> getCurrentUser() == NULL) return false;

            $userid = $this -> session -> getCurrentUser();

            if ($userid) return true;

            return false;
        }

        function getUserSessionData() {
            $id = $this -> session -> getCurrentUser();
            $this -> user = new UserModel();
            $this -> user -> get($id);
            error_log("sessionController::getUserSessionData(): " . $this -> user -> getUsername());

            return $this -> user;
        }

        public function initialize($user) {
            error_log("sessionController::initialize(): user: " . $user -> getUsername());
            $this -> session -> setCurrentUser($user -> getId());
            $this -> authorizeAccess($user -> getRole());
        }

        private function isPublic() {
            $currentUrl = $this -> getCurrentPage();
            error_log("sessionController::isPublic(): currentURL => " . $currentUrl);
            $currentUrl = preg_replace( "/\?.*/", "", $currentUrl);

            for ($i = 0; $i < sizeof($this -> sites); $i++){
                if ($currentUrl === $this -> sites[$i]['site'] && $this -> sites[$i]['access'] === 'public') {
                    return true;
                }
            }

            return false;
        }

        private function redirectDefaultSiteByRole($role) {
            $url = '';
            for ($i = 0; $i < sizeof($this -> sites); $i++) {
                if ($this -> sites[$i]['role'] === $role) {
                    $url = '/MVC3/' . $this -> sites[$i]['site'];
                    break;
                }
            }

            header('location: '.$url);   
        }

        private function isAuthorized($role) {
            $currentURL = $this -> getCurrentPage();
            $currentURL = preg_replace( "/\?.*/", "", $currentURL);
            
            for($i = 0; $i < sizeof($this -> sites); $i++){
                if($currentURL === $this -> sites[$i]['site'] && $this -> sites[$i]['role'] === $role){
                    return true;
                }
            }

            return false;
        }

        private function getCurrentPage() {
            $actual_link = trim("$_SERVER[REQUEST_URI]");
            $url = explode('/', $actual_link);
            error_log("sessionController::getCurrentPage(): actualLink => " . $actual_link . ", url => " . $url[2]);

            return $url[2];
        }

        function authorizeAccess($role) {
            error_log("sessionController::authorizeAccess(): role: $role");
            switch($role) {
                case 'user':
                    $this -> redirect($this -> defaultSites['user']);
                break;
                case 'admin':
                    $this -> redirect($this -> defaultSites['admin']);
                break;
                default:
            }
        }

        function signout() {
            $this -> session -> closeSession();
        }
    }
?>