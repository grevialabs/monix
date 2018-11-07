<?php
class ModularCtrl extends Controller
{

    public $index = 'dari index';
    public $data = array();

    public function __construct($_index = NULL)
    {
        $this->index = $_index;
        // debug('Hello from constructor Modularctrl'.HR);

        $this->db(new Db());
    }

    public function index()
    {
        $param = NULL;
        $this->loadView('modular.index',$param);        
    }

    public function about()
    {
        // debug('kacau',1);
        $param = NULL;
        $param['PAGE_TITLE'] = 'Tentang Kami';
        $this->loadView('modular.about',$param);        
    }

    public function multislug()
    {
        $param = NULL;
        $param['PAGE_TITLE'] = 'Multi slug testing page';
        $this->loadView('modular.multislug',$param);        
    }

    public function architecture()
    {
        // debug('kacau',1);
        $param = NULL;
        $param['PAGE_TITLE'] = 'Architecture Monix';
        $this->loadView('modular.architecture',$param);        
    }

    public function doc()
    {
        // debug('kacau',1);
        $param = NULL;
        $param['PAGE_TITLE'] = 'Dokumentasi';
        $this->loadView('modular.doc',$param);        
    }

    public function example()
    {
        $param = NULL;
        $param['PAGE_TITLE'] = 'Example';
        $this->loadView('modular.example',$param);        
    }

    public function hello()
    {
        // echo 'modularctrl from readme';
        echo 'hello from hello'. HR .' index : '.$this->index;

        // die;
    }
}
?>