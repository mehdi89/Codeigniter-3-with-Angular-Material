    <?php class Autologin {
         var $CI; 
         function __construct() {
             $this->CI =& get_instance();  
       }          function cookie_check() { 
           $galleta=$this->CI->input->cookie('yourcookiename');   
           if($galleta){
                 $usuario=$this->CI->users_model->getUserByHash('auto_login_hash',$galleta);
                 if($usuario['exito']){
                                      $this->CI->users_model->setLastLogin($usuario['data']->idusuario);                 //renueva la cookie
                     $cookie = array(                     'name'   => 'yourcookiename',
                         'value'  => sha1($usuario['data']->email.time()),
                         'expire' => 1209600                 );
                      $this->CI->load->helper('cookie');                  //la borra       
               delete_cookie($cookie['name']);                 //la setea en el navegador
                     $this->CI->input->set_cookie($cookie);                 //la guarda en la bd tabla  usuario
                     $this->CI->users_model->setAutoLoginHash($usuario['data']->idusuario,$cookie['value']);
                     if(!$this->CI->session->userdata('logeado')){
                         $this->CI->session->set_userdata(array(                     'logeado'=>TRUE, 
                        'idusuario'=>$usuario['data']->idusuario,
                         'nombre'=>$usuario['data']->nombre,
                         'apellido'=>$usuario['data']->apellido, 
                        'fb_id'=>$usuario['data']->fb_id,
                         'sexo'=>$usuario['data']->sexo,
                         'avatar'=>$usuario['data']->avatar));
                     }
                 } 
                         }
         } }