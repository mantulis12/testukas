<?php
class BankAccounts
{
    protected $accounts;

    function __construct($accounts)
    {
        $this->accounts = $accounts;
    }

    public function filterBy($accountType)
    {
        $filtered = [];
        foreach ($this->accounts as $account)
        {
        if($account->type() == $accountType){
        if($account->isActive()){
        $filtered[] = $account;
        }
        }
        }
        return $filtered;
    }
}
class Account
{
    protected $type;

    private function __construct($type)
    {
        $this->type = $type;
    }

    public static function open($type)
    {
        return new static($type);
    }

    public function type()
    {
        return $this->type;
    }

    public function isActive()
    {
        return true;
    }

}
$accounts = [
    Account::open('checking'),
    Account::open('savings'),
    Account::open('checking'),
    Account::open('savings')
];

$accounts = new BankAccounts($accounts);
$savings = $accounts->filterBy('checking');
var_dump($savings);
