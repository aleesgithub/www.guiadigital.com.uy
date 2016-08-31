<?php
namespace lib\graphics;

require_once "jpgraph/src/jpgraph.php";
require_once "jpgraph/src/jpgraph_pie.php";
require_once "jpgraph/src/jpgraph_pie3d.php";

Class Tarta{
//public $data        = null;
public $graph       = null;
public $p1          = null;
public $referencias = null;
public $valores     = null;

public function __construct($data,$titulo) {
    
    if(is_array($data)){
        foreach($data as $key=>$value) {
            $this->referencias[]  =$key;
            $this->valores[]      =$value;
        }
        $this->graph = new \PieGraph(250,200,"auto");
        $this->graph->img->SetMargin(40,180,40,40);    
        //$this->graph->SetBackgroundImage("pchart.JPG",BGIMG_FILLPLOT);
        $this->graph->img->SetAntiAliasing("white");
        $this->p1 = new \PiePlot3D($this->valores);
        $this->p1->SetSize(0.35);
        $this->p1->SetCenter(0.5);
        $this->p1->value->SetFont(FF_FONT1,FS_BOLD);
        $this->p1->value->SetColor("black");
        $this->p1->SetLabelPos(0.4);
        $this->p1->SetLegends($this->referencias);
        $this->p1->ExplodeAll();
    }
        //$this->graph->img->SetAntiAliasing();
        //$this->graph->SetMarginColor("white");
        $this->graph->title->Set($titulo);
        $this->graph->Add($this->p1);
        
    }   
     public function mostrar(){
        return $this->graph->Stroke();
     }
}

