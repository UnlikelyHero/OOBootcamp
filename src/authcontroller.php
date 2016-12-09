<?php namespace Acme

// receives HTTP Requests and provides a response.
class AuthController {

  protected $registration;

  public function __construct(RegisterUser $registration) {

    $this->registration = $registration

  }

  public function register() {

    $this->registration->execute([], $this);
  }

  public function registerSuccessful() {

      var_dump('...created successfully! Redirect somewhere.');
  }

  public function registerUnSuccessful() {

      var_dump('...created Un Successfully! Redirect back.');
  }
}
 ?>
