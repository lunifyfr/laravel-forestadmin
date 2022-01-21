<?php

namespace ForestAdmin\LaravelForestAdmin\Tests\Feature\Models\Mock;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomModel
 *
 * @package Laravel-forestadmin
 * @license GNU https://www.gnu.org/licenses/licenses.html
 * @link    https://github.com/ForestAdmin/laravel-forestadmin
 */
class CustomModel extends Model
{
    /**
     * @return array
     */
    public function searchFields(): array
    {
        return ['id', 'foo'];
    }
}
