<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		//On fait appel au model Utilisateur pour trouver l'utilisateur en cours
		//--> On le trouve grace à son login
		$user = Utilisateur::model()->findByAttributes(array('login'=>$this->username));

		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
			$user->login => $user->mot_de_passe
		);

		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;

			//Gestion des rôles
			//--> Si c'est un employé, on lui donne le rôle d'employé
			if($user->role == "employe")
			{
				$this->setState('type', 'employe');	
				$this->setState('role', 'employe');
			}

			//--> Si c'est une entreprise, on lui donne le rôle d'entreprise
			else if($user->role == "entreprise")
			{
				$this->setState('type', 'entreprise');	
				$this->setState('role', 'entreprise');
			}

			//--> Si c'est un admin, on lui donne le rôle d'admin
			else if($user->role == "admin")
			{
				$this->setState('type', 'admin');	
				$this->setState('role', 'admin');
			}

		return !$this->errorCode;
	}
}