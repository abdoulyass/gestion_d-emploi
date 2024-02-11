
    <div>
        <form wire:submit.prevent="addUser">
          
            <label for="name">Nom :</label>
            <input type="text" wire:model="name">
    
            <label for="email">Email :</label>
            <input type="email" wire:model="email">
    
            <button type="submit">Ajouter Utilisateur</button>
         </form>
    
           
        </form>
    
        <!-- Afficher la liste des utilisateurs -->
        <ul >
            @foreach($users as $user)
                <li>{{ $user->name }} - {{ $user->email }}</li>
            @endforeach
        </ul>
    </div>
