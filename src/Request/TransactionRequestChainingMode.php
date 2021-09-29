<?php

namespace HumanToComputer\Universign\Request;

abstract class TransactionRequestChainingMode
{
	const CHAINING_MODE_NONE = 'none';
	const CHAINING_MODE_EMAIL = 'email';
	const CHAINING_MODE_WEB = 'web';
}
