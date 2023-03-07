## About WikiCenter

It is a Wiki software :)

## Running WikiCenter on GitPod

GitPod is a Cloud Based Development Environment. It allows us to automate the creation of an environment on 
the cloud, to develop, check Features and PR previews live, onboarding people faster, pair programming, playgrounds, and more.

If you want to try if, go to [WikiCenter on GitPod](https://gitpod.io/#https://github.com/ijpatricio/wikicenter).
You can create an account in under a minute, using your Git provider of choice. You don't have to give any permissions to repositories,
only to read your e-mail address.

The tasks in [.gitpod.yml](./.gitpod.yml) will run. 

After all the 4 tasks are running, you can visit the app, for the link provided on the service of port 80 (even it will be https on 443) :)

Then run:

```bash
./vendor/bin/sail npm run dev
```

And now you can navigate to `/admin`. The login form will be filled for you automatically, just click Login :)

## License

WikiCenter is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
