 <?php

 /*
  * Setup class to load settings from db
  */
class Setup
{
    protected $dbh;
    protected $auth;
    public $setup;
    protected $setup_table = 'twig_settings';

    public function __construct(\PDO $dbh)
    {
        $this->setup = array();
        $this->dbh = $dbh;
        // determine setup table
        $this->setup_table = 'twig_settings';

        // check setup table exists
        if (!$this->dbh->query("SHOW TABLES LIKE '{$this->setup_table}'")->fetchAll()) {
            die("Setup table `{$this->setup_table}` NOT PRESENT in given database" . PHP_EOL);
        };

        // load setup
        $this->setup = $this->dbh->query("SELECT `setting`, `value` FROM {$this->setup_table}")->fetchAll(\PDO::FETCH_KEY_PAIR);
        $dbh = null;
    }

    /**
     * Setup::__get()
     *
     * @param mixed $setting
     * @return string
     */
    public function __get($setting)
    {
        return array_key_exists($setting, $this->setup) ? $this->setup[$setting] : NULL;
    }

    /**
     * @return array
     */
    private function getAll()
    {
        return $this->setup;
    }

    /**
     * Setup::__set()
     *
     * @param mixed $setting
     * @param mixed $value
     * @return bool
     */
    public function __set($setting, $value)
    {
        $query_prepared = $this->dbh->prepare("UPDATE {$this->setup_table} SET value = :value WHERE setting = :setting");

        if ($query_prepared->execute(['value' => $value, 'setting' => $setting])) {
            $this->setup[$setting] = $value;
            return true;
        }
        return false;
    }

     /**
     *
     * Setup the Globals array for twig
     * @return
     */
    public function setup_globals() {
        $siteurl = $this->site_url().'/';
        $year = date("Y");
        $allowRegister = $this->allowRegister;
        $sitename = $this->sitename;
        $site_admin_dir = $this->site_admin_dir;
        $return = array(
            'url' => $siteurl,
            'year' => $year,
            'allowRegister' => $allowRegister,
            'name' => $sitename,
            'admin' => $siteurl.$site_admin_dir
        );
        return $return;
    }

    public function setup_social() {
        $publisher = $this->publisher;
        $author = $this->author;
        $SiteTwitterImage = $this->SiteTwitterImage;
        $OgSiteImageUrl = $this->OgSiteImageUrl;
        $SiteVideoUrl = $this->SiteVideoUrl;
        $FacebookUserID = $this->FacebookUserID;
        $FacebookAppID = $this->FacebookAppID;
        $instagramurl = $this->instagramurl;
        $facebookurl = $this->facebookurl;
        $twitterurl = $this->twitterurl;
        $linkedinurl = $this->linkedinurl;
        $pinteresturl = $this->pinteresturl;
        $return = array(
            'publisher' => $publisher,
            'author' => $author,
            'SiteTwitterImage' => $SiteTwitterImage,
            'OgSiteImageUrl' => $OgSiteImageUrl,
            'SiteVideoUrl' => $SiteVideoUrl,
            'FacebookUserID' => $FacebookUserID,
            'FacebookAppID' => $FacebookAppID,
            'instagramurl' => $instagramurl,
            'facebookurl' => $facebookurl,
            'twitterurl' => $twitterurl,
            'linkedinurl' => $linkedinurl,
            'pinteresturl' => $pinteresturl,
        );
        return $return;
    }

    /**
     *
     * PHP Mailer Setup
     * These are the smtp mail sender settings used in contact.php - PHPMailer
     *
     */
    public function setup_phpmailer() {
    define('DEBUG', $this->debug);                        // 0-4 debug level
    define('EMAIL', $this->email);                        // The email to be used for sending
    define('EMAILNAME', $this->emailname);                // From name on the email
    define('PASS', $this->pass);                          // Password
    define('SMTPHOST', $this->smtphost);                  // SMTP Host name
    define('SMTPAUTH', $this->smtpauth);                  // Requires Authentication - true/false
    define('SMTPSECURE', $this->smtpsecure);              // ssl port 465, tls port 587 - Do not mix
    define('PORT', $this->smtpport);
    define('SUBJECTLINE', $this->subjectline);
    define('MAILCC', $this->mailcc);
    define('MAILBCC', $this->mailbcc);
    $dbh = null;
    }

    public function get_user($auth) {
        if ($auth->isLogged()) {
            $uid= $auth->getCurrentUID();
            $result = $auth->getUser($uid);
            return $result;
        } else {
            return '0';
        }
    }

    public function site_url() {
        return $this->siteurl;
    }
    
    public function current_url() {
        $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
            $_SERVER['REQUEST_URI'];
        return $link;
    }
}