<?php 

require_once 'producto.php';



class Ecommerce 
{
    private $carrito;
    
    private $usuario;

    private $catalogo = [];

    public function __construct()
    {
        $this->carrito = new Carrito;
        $this->catalogo = [
          new Producto (1,459.99,'Aclarante'),
          new Producto (2,499.99,'Tonificante'),
          new Producto (3,469.99,'Jabon'),
      ];
        
    }

    

    public function searchProducts($query){

        $results= [];

        foreach($this->catalogo as $product){

        //stripos - busca si un string contiene otro string 
            if(stripos ($product->getTitle(), $query) !== false ) {
                $results[] = $product;
            }
        }

        return $results;

    }

    public function getCatalog() 
    {

        return $this->catalogo;
    }

    public function addProduct(Product $product, int $qty = 1) 
    {
        $this->carrito->addProduct($product, 3);
    }

    public function findProduct(int $id) 
    {
        foreach ($this->catalogo as $product) {
            if ($product->getId() === $id) {
                return $product;
            }
        }
     }

    public function register(array $data) 
    {
        // creo un usuario
    }

    public function login(array $data) 
    {
        // guarda en sesion
    }
}

?>