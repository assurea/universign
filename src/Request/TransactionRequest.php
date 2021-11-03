<?php

namespace HumanToComputer\Universign\Request;

/**
 * @method string getProfile()
 * @method self setProfile(string $profile)
 * @method string getCustomId()
 * @method self setCustomId(string $customId)
 * @method TransactionSigner[] getSigners()
 * @method self setSigners(TransactionSigner[] $signers)
 * @method TransactionDocument[] getDocuments()
 * @method self setDocuments(TransactionDocument[] $documents)
 * @method bool getMustContactFirstSigner()
 * @method self setMustContactFirstSigner(bool $mustContactFirstSigner)
 * @method bool getFinalDocSent()
 * @method self setFinalDocSent(bool $finalDocSent)
 * @method string getDescription()
 * @method self setDescription(string $description)
 * @method string getCertificateType()
 * @method self setCertificateType(string $certificateType)
 * @method string getLanguage()
 * @method self setLanguage(string $language)
 * @method bool getHandwrittenSignature()
 * @method self setHandwrittenSignature(bool $handwrittenSignature)
 * @method string getChainingMode()
 * @method self setChainingMode(string $chainingMode)
 */
class TransactionRequest extends Base
{
    protected $attributesTypes = [
        'profile' => 'string',
        'customId' => 'string',
        'signers' => 'array',
        'documents' => 'array',
        'mustContactFirstSigner' => 'bool',
        'finalDocSent' => 'bool',
        'description' => 'string',
        'certificateType' => 'string',
        'language' => 'string',
        'handwrittenSignature' => 'bool',
        'chainingMode' => 'string',
    ];

    public function addSigner(TransactionSigner $signer): self
    {
        $this->attributes['signers'][] = $signer;
        return $this;
    }

    public function addDocument(TransactionDocument $document): self
    {
        $this->attributes['documents'][] = $document;
        return $this;
    }
}
