<?php namespace Anomaly\Streams\Addon\Module\Users\User\Contract;

interface UserRepositoryInterface
{

    public function createUser(array $credentials);

    public function updateUser($userId, array $credentials, array $data = []);

    public function changePassword($userId, $password);

    public function findByLoginAndPassword($login, $password);

    public function findByUserId($userId);

}
 