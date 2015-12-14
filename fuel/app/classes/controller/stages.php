<?php

class Controller_Stages extends Controller_Rest
{
    protected $format = 'json';

	public function action_index($num = null)
	{
        if(!$num){
            $stages = Model_Stage::find('all');
            $this->response($stages);
            return;
        }
        
        //$stage = Model_Block::find_one_by('id', "1");
        //$stage = Model_Block::find('all');
        $stage = Model_Stage::find_one_by('id', array('related' => array('blocks')));

        var_dump($stage);
        exit();
        
        
        //exit();
        /* if(!$stage){ */
        /*     $stage = ""; */
        /* } */
        

        $this->response($stage);

        
        /* $stages = Model_Stage::find('all', array('related' => array('blocks'))); */
        
        /* var_dump($stages); */


        /* /\* foreach($stages as $stage){ *\/ */
        /* /\*     var_dump($stage->to_array()); *\/ */
        /* /\* } *\/ */
        
        
        /* exit(); */
        
        //$this->response($stages);
        /* $this->response( */
        /*                 "id"=>$stages[0]["id"] */
        /*                 ); */
	}

    public function post_write()
    {
        $title = Input::post('title');
        Model_Stage::forge(['title' => $title])->save();
    }
}
