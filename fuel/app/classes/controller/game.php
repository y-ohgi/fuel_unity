<?php

class Controller_Game extends Controller_Rest
{
    protected $format = 'json';

    /**
     * stage一覧を返す、引数に数字が渡されていた場合は特定のステージ情報を返す
     *
     * @param Mixed $num ステージ番号
     *
     */
	public function action_stages($num = null)
	{
        if(!$num){
            $stages = Model_Stage::find('all');
            $this->response($stages);
            return;
        }

        $stage = Model_Block::find_by('stage_id', '1');

        $this->response($stage);
        
        
	}

}
