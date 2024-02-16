<div>

    <!-- Autres détails de l'utilisateur... -->
    
    <!-- Écouteur d'événement pour le rafraîchissement automatique -->
    @push('scripts')
        <script>
            Livewire.on('roleUpdated', () => {
                location.reload();
            });
        </script>
    @endpush
</div>