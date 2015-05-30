<?php
namespace HP\Bundle\EmailApiBundle\Gateway;

interface EmailApiGatewayInterface
{
    const MAX_RESULTS_DEFAULT = 50;

    public function authenticate();
    public function getPersonAuthenticatedEmail();
    public function getInbox($maxResults = EmailApiGatewayInterface::MAX_RESULTS_DEFAULT);
}
