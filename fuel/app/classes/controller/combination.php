<?php
class Controller_Combination extends Controller_Template
{
  public function action_index()
  {
    // 最新レコードの番号を取得する
    $latest = Model_Latest::find('1');
    if ( is_null($latest) )
    {
      $latest = Model_Latest::forge(array(
        'num' => 1,
      ));
      $latest->save();
    }

    // シャッフルする処理
    if (Input::method() == 'GET')
    {
      $shuffle = (bool)Input::get('shuffle');
      if($shuffle) {
        $latest->num = (int)$latest->num + 1;
        $latest->save();

        // メッセージを表示し、リダイレクトする
        Session::set_flash('success', 'Shuffle Success.');
        Response::redirect('combination');
      }
    }
    $data['latest'] = $latest->num;
    $data['combi'] = Model_Combi_Record::get_table($latest->num);
		$this->template->title = "Combination";
		$this->template->content = View::forge('combi/index', $data);
  }

  private function shuffle_group() {

  }
}
