<form>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" wire:model="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" wire:model="password">
    <button type="submit" wire:click.prevent="submit">Login</button>
</form>
