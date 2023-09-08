## About WikiCenter

![Intro 1](./docs/images/intro-1.png)

It is a Wiki software :)

The creation and outline can be read on this [Blog Post](https://blog.jpat.dev/building-a-wiki-software-with-laravel-and-filament)

Visit [Youtube Playlist](https://www.youtube.com/watch?v=aRI9-DzXOkI&list=PL2Njk5tK9lmuM5Oac06vxILXJvoYS3Qrs) to 
see live coding sessions on this repository.

## Roadmap

[Visit TODO's](./TODO.md)

## Running locally

#### With Docker Desktop 

After clone the project you need to take the following steps: 

1. Run the composer install 

   ```shell
   composer install
   ```

2. Copy the .env.example file and create new one

   ```shell
   cp .env.example .env
   ```

3. Generate a key

   ```shell
   php artisan key:generate
   ```

4. Build container

   ```shell
   ./vendor/bin/sail up
   ```

5. Run the migrations

   ```shell
   sail artisan migrate
   ```

6. Seed database with dummy data

   ```shell
   sail artisan db:seed
   ```

   In case you are running commands inside container, you just need to run `php artisan db:seed` without the prefix sail.

7. Install frontend dependencies

   ```shell
   npm install && npm run dev
   ```

8. Go to `http://localhost/admin`

9. Enjoy


## Running WikiCenter on GitPod

GitPod is a Cloud Based Development Environment. It allows us to automate the creation of an environment on 
the cloud, to develop, check Features and PR previews live, onboarding people faster, pair programming, playgrounds, and more.

If you want to try it, [open in GitPod](https://gitpod.io/#https://github.com/ijpatricio/wikicenter).
You can create an account in under a minute, using your Git provider of choice. You don't have to give any permissions to repositories,
only to read your e-mail address.

The GitPod setup for this repository was made on a [Youtube Live Session](https://www.youtube.com/watch?v=Ng1WW45Zlho&list=PL2Njk5tK9lmuM5Oac06vxILXJvoYS3Qrs&index=4).

The tasks in [.gitpod.yml](./.gitpod.yml) will run.

![Coding in GitPod 1](./docs/images/coding-in-gitpod-1.png)

After all the 4 tasks are running, the last one keeps running `Vite`.

![Coding in GitPod 2](./docs/images/coding-in-gitpod-2.png)

You can now visit the app, for the link provided on local 80. (It will be public 443 SSL)

![Coding in GitPod 3](./docs/images/coding-in-gitpod-3.png)
Then run, in an available terminal, (or a new one):

```bash
./vendor/bin/sail artisan migrate:fresh --seed
```

And now you can navigate to `/admin`. The login form will be filled for you automatically, just click Login :)

![Coding in GitPod 4](./docs/images/coding-in-gitpod-4.png)

## License

WikiCenter is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
