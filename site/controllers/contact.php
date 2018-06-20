<?php

return function($site, $pages, $page) {

	$alert = null;

	if(r::is('post') && get('submit')) {

		if(!empty(get('subject'))) {
			go($page->url());
			exit;
		}

		$data = array(
			'name'    => get('name'),
			'email'   => get('email'),
			'text'    => get('text')
		);

		$rules = array(
			'name'    => array('required'),
			'email'   => array('required', 'email'),
			'text'    => array('required', 'min' => 3, 'max' => 3000),
		);

		$messages = array(
			'name'    => 'enter a valid name',
			'email'   => 'enter a valid email address',
			'text'    => 'enter a text between 3 and 3000 characters'
		);

		if($invalid = invalid($data, $rules, $messages)) {
			$alert = $invalid;
		} else {

			$mailto = $page->mailto();
			$sender = $page->sender();

			$email = email(array(
				'to'      => $mailto,
				'from'    => $sender,
				'subject' => 'New message from ' . $data['name'],
				'replyTo' => $data['name'] .'<'.$data['email'].'>',
				'body'    => $data['text']
			));

			if(v::email($mailto) and v::email($sender) and $email->send()) {
				$success = array();
				$data = array();
			} else {
				$error = array();
			}

		}

	}

	return compact('alert', 'data', 'success', 'error');

};