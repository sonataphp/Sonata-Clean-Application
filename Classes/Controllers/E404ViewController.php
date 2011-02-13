<?
//
//  E404ViewController.php
//  Vedere
//
//  Created by Doejo on 12/20/2010.
//  Copyright Vedere 2011. All rights reserved.
//

class E404ViewController extends UIViewController {
  
    public function indexAction() {
        UIApplication::sharedApplication()->sendHeader(UIApplication404Header);
        $this->view = new UIView();
        $this->view->initWithDelegate($this)
                   ->setLayout("404");
        $this->bufferizeTemplates();
        $this->presentViewController();
    }
    
    // Implement viewDidLoad to do additional setup after loading the view, typically from a phtml.
    public function viewDidLoad() {
        parent::viewDidLoad();
    }
    
    //  Implement viewDidLoad to do additional setup after unloading the view.
    public function viewDidUnLoad() {
        parent::viewDidUnLoad();
    }
    
}

?>