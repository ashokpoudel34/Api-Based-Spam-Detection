<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('API Key Usage Instructions')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium"><?php echo e(__('How to Use Your API Key')); ?></h3>
                    <p><?php echo e(__('Include your API key in the request header as follows:')); ?></p>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
GET /api/endpoint
Host: api.blossomcosmetics.shop
X-API-KEY: <?php echo e($apiKey); ?>

</code>
                    </pre>

                    <h3 class="text-lg font-medium mt-4"><?php echo e(__('Implementation Examples')); ?></h3>

                    <h4 class="text-md font-semibold mt-4"><?php echo e(__('Using cURL')); ?></h4>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
curl -X GET https://api.blossomcosmetics.shop/endpoint \\
-H "X-API-KEY: <?php echo e($apiKey); ?>"
</code>
                    </pre>

                    <h4 class="text-md font-semibold mt-4"><?php echo e(__('Using Python Requests')); ?></h4>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
import requests

url = 'https://api.blossomcosmetics.shop/endpoint'
headers = {
    'X-API-KEY': '<?php echo e($apiKey); ?>'
}

response = requests.get(url, headers=headers)
print(response.json())
</code>
                    </pre>

                    <h4 class="text-md font-semibold mt-4"><?php echo e(__('Using JavaScript Fetch')); ?></h4>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
fetch('https://api.blossomcosmetics.shop/endpoint', {
    method: 'GET',
    headers: {
        'X-API-KEY': '<?php echo e($apiKey); ?>'
    }
})
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));
</code>
                    </pre>

                    <h4 class="text-md font-semibold mt-4"><?php echo e(__('Using Axios (JavaScript)')); ?></h4>
                    <pre class="bg-gray-200 dark:bg-gray-700 p-4 rounded mt-2">
<code>
const axios = require('axios');

axios.get('https://api.blossomcosmetics.shop/endpoint', {
    headers: {
        'X-API-KEY': '<?php echo e($apiKey); ?>'
    }
})
.then(response => {
    console.log(response.data);
})
.catch(error => {
    console.error('Error:', error);
});
</code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /Users/ashokpoudel/Documents/Cyber Security/Api-Based-Spam-Detection/resources/views/dashboard.blade.php ENDPATH**/ ?>