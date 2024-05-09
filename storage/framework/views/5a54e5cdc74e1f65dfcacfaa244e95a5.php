<?php if(current_user()->isNot($user)): ?>
    <form method="POST" action="/profiles/<?php echo e($user->username); ?>/follow">
        <?php echo csrf_field(); ?>
        <button 
            type="submit" 
            class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
            >
                <?php echo e(auth()->user()->following($user) ? 'Unfollow me' : 'Follow me'); ?>

        </button>
    </form>
<?php endif; ?><?php /**PATH C:\Users\jbron\tweety\resources\views/components/follow-button.blade.php ENDPATH**/ ?>