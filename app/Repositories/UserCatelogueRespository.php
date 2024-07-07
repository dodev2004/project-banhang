<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserCatelogueRespositoryInterface;
use App\Models\UserCatelogue;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRespository;
use Illuminate\Database\Eloquent\Builder;
/**
 * Class UserService
 * @package App\Services
 */
class UserCatelogueRespository extends BaseRespository  implements UserCatelogueRespositoryInterface
{
  public function __construct(UserCatelogue $user){
    $this->model = $user;
  }
  public function create($data){
    $this->model::create($data);
  }
  public function findUserCatelogueId($id){
      return $this->findId($id);
  }
  public function updateUserCatelogue($data, $id)
  {
    $this->model::find($id)->update($data);
  }
  public function deleteUserCatelogueById($id){
    $users = $this->model::find($id);
    $users->delete();
  }
}
