<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Verifica tu dirección de correo electrónico a través del link que te acabamos de enviar. Si no recibiste ningún correo, presiona el botón debajo.') }}
        
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Un nuevo link de verificación ha sido enviada a la dirección de tu configuración de perfil.') }}
            </div>
        @endif

        <div style="text-align: center">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div>
                    <x-jet-button type="submit">
                        {{ __('Reenviar correo de verificación') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
