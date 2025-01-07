<x-layouts.app>
    <div class="flex flex-col items-center justify-center py-12">
        <h1 class="text-3xl text-center font-bold pb-4">About the project</h1>
    </div>
    <div class="text-black flex flex-col gap-4">
        <p>Envflow is a simple tool to encrypt your env file and share it with your team. It uses a shared key to encrypt the env file, so only the team members with the key can decrypt it.</p>
        <p>The key is generated randomly and can be used to decrypt the env file. The key is never stored in the database, so it's safe to share it with your team.</p>
        <p>It was built using Laravel, Livewire and Tailwind CSS, so it's easy to use and customize.</p>
        <p>It uses <a href="https://upstash.com/" class="text-rose-600">Upstash Redis</a> for storing the encrypted env file.</p>
        <p><a href="https://upstash.com/" class="text-rose-600">Upstash Redis</a> is a serverless cloud-based Redis™ service that provides high availability, scalability, and security. It is easy to use and integrates seamlessly with Laravel.</p>
    </div>
</x-layouts.app>
