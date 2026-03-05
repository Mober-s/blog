<flux:dropdown position="bottom" align="start">
    <flux:sidebar.profile
        icon:trailing="chevrons-up-down"
        data-test="sidebar-menu-button"
    />
    <flux:menu>
        <flux:menu.radio.group>
            <flux:menu.item :href="route('login')" icon="arrow-right-start-on-rectangle" @class(['w-full', 'cursor-pointer']) wire:navigate>
                {{ __('Log in') }}
            </flux:menu.item>
            <flux:menu.item :href="route('register')" icon="plus" @class(['w-full', 'cursor-pointer']) wire:navigate>
                {{ __('Register') }}
            </flux:menu.item>
        </flux:menu.radio.group>
    </flux:menu>
</flux:dropdown>
