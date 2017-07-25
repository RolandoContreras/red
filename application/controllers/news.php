<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
    public function __construct() {
        parent::__construct();     
//        $this->load->model('comments_model','obj_comments');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{   
            
        //SELECT URL    
        $url = explode("/",uri_string());
            
        if(isset($url[1])){
             $news = trim($url[1]);
        }    
        
        
        
        if($news == "que-es-criptomoneda"){
            $data['title'] = "BITCOIN";
            $data['title_content'] = "";
            $data['content'] = "Bitcoin es una moneda virtual e intangible. Es decir, que no se puede tocar en ninguna de  sus formas como ocurre con las monedas o billetes, pero puede utilizarse como medio de pago de la misma forma que éstos. Al igual que ocurre con el dinero que tenemos en nuestro banco los Bitcoin aumentan o disminuyen de nuestra cuenta personal según realicemos ingresos o gastos, la única diferencia es que no existe la posibilidad de monetizarlos, como ocurre cuando, por ejemplo, retiramos dinero de un cajero automático. <br> Sin lugar a dudas lo que hace distinto a Bitcoin frente a las monedas tradicionales y otros medios de pago virtual como Ama​zon Coins, es la descentralización. O lo que es lo mismo, Bitcoin está fuera del control de cualquier gobierno, institución o entidad financiera, ya sea de tipo estatal o privado, como pueden ser el euro, controlado por el Banco Central Europeo o el Dólar por la Reserva Federal de los EEUU.";
            $data['image'] = "static/page_front/white/images/front/blog/bitcoin.jpg";
            
        }elseif($news == "blockchain-cadena-de-bloques"){
            $data['title'] = "BLOCKCHAIN";
            $data['title_content'] = "";
            $data['content'] = "El Blockchain (o cadena de bloques) es una base de datos compartida que funciona como un libro para el registro de operaciones de compra-venta o cualquier otra transacción. Es la base tecnológica del funcionamiento del bitcoin, por ejemplo. Consiste en un conjunto de apuntes que están en una base de datos compartida on-line en la que se registran mediante códigos las operaciones, cantidades, fechas y participantes. Al utilizar claves criptográficas y al estar distribuido por muchos ordenadores (personas) presenta ventajas en la seguridad frente a manipulaciones y fraudes. Una modificación en una de las copias no serviría de nada, sino que hay que hacer el cambio en todas las copias porque la base es abierta y pública.";
            $data['image'] = "static/page_front/white/images/front/blog/blockchain.jpg";
        }else{
            $data['title'] = "BITCOIN - NUEVA REALIDAD";
            $data['title_content'] = "";
            $data['content'] = "Viena no solo será conocida como la capital de Austria, la cuna de la música, la hermosa ciudad a las orillas del Danubio, también será desde ahora la primera urbe en alojar un Banco Bitcoin con sede física, de acuerdo con Cryptocoinsnews.

Un banco dedicado a Bitcoin, al parecer el primero del mundo abrió sus puertas en Mariahilfer Strasse en el centro de Viena, según informó The Local, un sitio de noticias en lengua inglesa de Austria. El banco fue creado por una startup Blockchain con sede en Berlín,  Bit Trust Services, y se llama Bitcoin-Bank (banco Bitcoin). El banco está diseñado para que la compra y venta de Bitcoin sea más fácil y segura que otras opciones en persona.

Los cajeros automáticos del banco intercambian bitcoins por euros, y viceversa. El banco también proporciona información sobre la moneda virtual.

Magdalena Isbrandt, directora gerente de Bit Trust, dijo a la emisora ​​estatal ORF que las transacciones en moneda digital son más rápidas que otras transacciones y que se pueden hacer sin un intermediario.

“Los valores y el dinero pueden ser enviados directamente de usuario a usuario”, dijo.

Andreas Petersson, cofundador de Bitcoin Austria, dijo que la principal ventaja de la moneda digital es el anonimato.

“Si pago en línea con bitcoins, tengo un grado de privacidad“, dijo Petersson.  Al pagar por productos digitales, como los juegos de computadora, un comprador no siente que están entregando todos sus datos privados, como los números de su tarjeta de crédito.";
            $data['image'] = "static/page_front/white/images/front/blog/bank.jpg";
        }
        
            
		$this->load->view('news',$data);
	}
}
