1. 安装laravel

2. 下载layui-admin

3. 安装ide-help
```
    step 1:
    composer require --dev barryvdh/laravel-ide-helper

    step 2: the providers array in config/app.php
    Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,

    step 3:
```

4. 配置github
```
    step 1: 创建git仓库

    step 2: 安装git的事例进行操作

    遇见问题：fatal: remote origin already exists.
    解决：
    step 1:
    git remote rm origin

    step 2:
    git remote add origin [你的git项目的ssh地址]

    git: 强制覆盖本地代码
    git fetch --all
    git reset --hard origin/master
```

5. 安装webpack编译环境
```
    step 1:
    npm install 或者 cnpm install

    备注：主要使用的命令
    npm run dev
    npm run watch
```

6. 将layui样式放到resources文件夹内
```
    step 1:   在webpack.mix.js添加
    mix.copyDirectory('resources/layuiadmin', 'public/layuiadmin');

    step 2: 重新跑监听
    npm run watch

    step 3: 将layui的html文件放到resources的view下，并修改为的blade文件
```

7. 安装laravel语言包
```
    step 1:
    composer require caouecs/laravel-lang

    step 2: 语言包的使用
    ...
```

8. 发现laravel没有tp那样的验证场景
> 方案一：定义不同的Request   缺点：会造成非常多的Request文件
> 方案二：参考https://learnku.com/docs/laravel-specification/5.5/form-validation/507的FormRequest 表验证类文件

9. git常用上传流程
```
    git add .
    git commit -m "[你的备注信息]"
    git push origin master
```
10. laravel 新知识
```
    compact 函数
    laravel 模板中route传$user表示传输主键
    laravel 依赖注入模型 模型策略
```
11. 常用artisan 命令
```
    artisan make:controller [Name] --resources --model
    artisan make:policy --model=[Name] [NamePolicy]
```

12. laravel 自带用户认证使用 - 安装
```
    composer require laravel/ui
    php artisan ui vue --auth
    npm install
```

13. laravel扩展实现用户角色权限管理
```
    step 1:
    composer require spatie/laravel-permission

    step 2: 生成迁移文件
    php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"

    step 3:
    php artisan migrate
```

14. pjax 使用
插件地址: https://github.com/spatie/laravel-pjax
学习地址: http://houdunren.gitee.io/note/javascript/pjax.html
```
    step 1:
    后台安装: composer require spatie/laravel-pjax
    在 app/Http/Kernel.php 文件添加
    protected $middleware = [
        ...
        \Spatie\Pjax\Middleware\FilterIfPjax::class,
    ];

    step 2:
    前台引入: (以laravel为例子)
    <script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
    <script src="{{asset('plugin/pjax/pjax.js')}}"></script>
    <link rel="stylesheet" href="{{asset('plugin/pjax/pjax.css')}}">

    step 3:
    修改 Laravel框架根目录下的 webpack.mix.js 文件，添加以下代码用于复制 plugin 目录
    .mix.copyDirectory('resources/plugin', 'public/plugin')

    定义 pjax加载区域
    <div class="main-content container-fluid" id="pjax-container">
    	<!--pjax加载动画-->
    	<div id="loading">
    		<div class="spinner">
    			<div class="rect1"></div>
    			<div class="rect2"></div>
    			<div class="rect3"></div>
    			<div class="rect4"></div>
    			<div class="rect5"></div>
    		</div>
    	</div>
    	<!--pjax加载动画 结束-->
    	<div id="app">
    		@yield('content')
    	</div>
    </div>

    pjax文件内容:
    //定义加载区域
    $(document).pjax('a','#pjax-container');
    //定义pjax有效时间，超过这个时间会整页刷新
    $.pjax.defaults.timeout = 1200;
    //显示加载动画
    $(document).on('pjax:click', function() {
        $("#loading").show();
    });
    //隐藏加载动画
    $(document).on('pjax:end', function() {
        $("#loading").hide();
    });
```
