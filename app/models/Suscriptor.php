<?php

class Suscriptor extends Eloquent {

	protected $table = 'suscriptor';

	protected $fillable = array('nombres','email','telefono');

}