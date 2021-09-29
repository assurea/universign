<?php

namespace HumanToComputer\Universign\Request;

abstract class TransactionDocumentType
{
	const PDF = 'pdf';
	const PDF_READ_ONLY = 'pdf-for-presentation';
	const PDF_OPTIONAL = 'pdf-optional';
	const SEPA = 'sepa';
}
