<?php
class Controller_Member extends Controller_Template
{

	public function action_index()
	{
		$data['members'] = Model_Member::find('all');
		$this->template->title = "Members";
		$this->template->content = View::forge('member/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('member');

		if ( ! $data['member'] = Model_Member::find($id))
		{
			Session::set_flash('error', 'Could not find member #'.$id);
			Response::redirect('member');
		}

		$this->template->title = "Member";
		$this->template->content = View::forge('member/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Member::validate('create');

			if ($val->run())
			{
				$member = Model_Member::forge(array(
					'name' => Input::post('name'),
					'user_id' => Input::post('user_id'),
					'group_id' => Input::post('group_name'),
				));

				if ($member and $member->save())
				{
					Session::set_flash('success', 'Added member #'.$member->id.'.');

					Response::redirect('member');
				}

				else
				{
					Session::set_flash('error', 'Could not save member.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		$groups = Model_Group::find('all');
		$group_array = array();
		foreach ($groups as $group) {
			$group_array[$group->id] = $group->name;
		}
		$this->template->set_global('groups', $group_array, false);

		$this->template->title = "Members";
		$this->template->content = View::forge('member/create');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('member');

		if ( ! $member = Model_Member::find($id))
		{
			Session::set_flash('error', 'Could not find member #'.$id);
			Response::redirect('member');
		}

		$val = Model_Member::validate('edit');

		if ($val->run())
		{
			$member->name = Input::post('name');
			$member->user_id = Input::post('user_id');
			$member->group_id = Input::post('group_id');

			if ($member->save())
			{
				Session::set_flash('success', 'Updated member #' . $id);

				Response::redirect('member');
			}

			else
			{
				Session::set_flash('error', 'Could not update member #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$member->name = $val->validated('name');
				$member->user_id = $val->validated('user_id');
				$member->group_id = $val->validated('group_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('member', $member, false);
		}

		$this->template->title = "Members";
		$this->template->content = View::forge('member/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('member');

		if ($member = Model_Member::find($id))
		{
			$member->delete();

			Session::set_flash('success', 'Deleted member #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete member #'.$id);
		}

		Response::redirect('member');

	}

}
