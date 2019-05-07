<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
       
       //Trong laravel, khi chúng ta muốn hiển thị ra hoặc sửa một bài viết hay một thông tin nào đó ta thường truyền vào id của bài viết đó 
       //rồi dùng controller truy xuất ra bài viết qua hàm find() của model tương ứng. Nhưng Laravel đã hỗ trợ chúng ta kết nối giữa model và route để công việc truy xuất dữ liệu trở nên thuận tiện và dễ dàng hơn. 
       //Để biết rõ cách dùng tính năng này thế nào chúng ta cùng tìm hiểu cơ chế Route Model Binding trong laravel nhé!
        Route::model('tasks', 'Task');
        Route::model('project', 'Project');
        
        //Thay vì truyền tham số trên url bằng id của các model ta cấu hình lại cho nó nhận tham số bằng slug của các model.
        Route::bind('task', function($value) {
            return \App\Task::where('slug', $value)->first() ?? abort(404);
        });
        Route::bind('project', function($value) {
            return \App\Project::where('slug',$value)->first()?? abort(404);
        });
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
