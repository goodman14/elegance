<?php
return function($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'name'  => get('name'),
      'email' => get('email'),
      'telephone' => get('telephone'),
      'text'  => get('text')
    );
    $rules = array(
      'name'  => array('required'),
      'email' => array('required', 'email'),
      'telephone' => array('required'),
      'text'  => array('required'),
    );
    $messages = array(
      'name'  => 'Please enter a valid name',
      'email' => 'Please enter a valid email address',
      'telephone' => 'Please enter a valid telephone number',
      'text'  => 'Please enter a text between 3 and 3000 characters'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);
      // build the email
      $email = email(array(
        'to'      => 'goodman14_14@hotmail.co.uk',
        'from'    => 'info@elegancebydesign.co.uk',
        'subject' => 'New website contact form submission',
        'replyTo' => $data['email'],
        'body'    => $body
      ));
      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        //go('contact/thank-you');
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }
    }
  }
  return compact('alert');
};
