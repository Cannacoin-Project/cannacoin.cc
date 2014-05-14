## How to participate

You can report any problem or help to improve cannacoin.cc by opening an issue or a [pull request](#working-with-github) on [GitHub](https://github.com/cannacoin-project/cannacoin.cc).
### Working with GitHub

GitHub allows you to make changes to a project using git, and later submit them in a "pull request" so they can be reviewed and discussed. Many online how-tos exist so you can learn git, [here's a good one](https://www.atlassian.com/git/tutorial/git-basics).

In order to use GitHub, you need to [sign up](http://github.com/signup) and [set up git](https://help.github.com/articles/set-up-git). You will also need to click the **Fork** button on the cannacoin.cc [GitHub page](https://github.com/cannacoin-project/cannacoin.cc) and clone your GitHub repository into a local directory using the following command lines:

```
git clone (url provided by GitHub on your fork's page) cannacoin.cc
cd cannacoin.cc
git remote add upstream https://github.com/cannacoin-project/cannacoin.cc.git
```

**How to send a pull request**

1. Checkout to your master branch. `git checkout master`
2. Create a new branch from the master branch. `git checkout -b (any name)`
3. Edit files and [preview](#previewing) the result.
4. Track changes in files. `git add -A`
5. Commit your changes. `git commit -m '(short description for your change)'`
6. Push your branch on your GitHub repository. `git push origin (name of your branch)`
7. Click on your branch on GitHub and click the **Compare / pull request** button to send a pull request.

When submitting a pull request, please take required time to discuss your changes and adapt your work. It is generally a good practice to split unrelated changes into separate branchs and pull requests.

**How to make additional changes in a pull request**

You simply need to push additionnal commits on the appropriate branch of your GitHub repository. That's basically the same steps as above, except you don't need to re-create the branch and the pull request.

**How to reset and update your master branch with latest upstream changes**

1. Fetch upstream changes. `git fetch upstream`
2. Checkout to your master branch. `git checkout master`
3. Replace your master branch by the upstream master branch. `git reset --hard upstream/master`
4. Replace your master branch on GitHub. `git push origin master -f`

### Including RPC data.

You must have a copy of the CannaCoind server running on your localhost in order for the data pulled into your website.  
Start by getting a copy of Cannacoin here [Cannacoin Download](https://github.com/cannacoin-project/cannacoin)

After you have a copy of Cannacoin running, edit the config file located in /network/connect.php with your RPC user/password.
You are now able to use jsonRPC commands to request data directly from Cannacoind. (see index.php for example).

