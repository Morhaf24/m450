# Install node (if required)
```bash
cd ~
curl -sL https://deb.nodesource.com/setup_18.x -o nodesource_setup.sh
sudo bash nodesource_setup.sh
sudo apt install nodejs
```

# GETTING STARTED
1. clone the repo
2. run `docker-compose up`
3. `cd cypress` 
4. `yarn run cypress open`

## Starting cypress
To start cypress you need to move into the cypress folder and start cypress:
```bash
cd cypress
```
When you do this for the first time you will need to install the dependencies by running:
```bash
yarn
```
Then start cypress:
```bash
yarn run cypress open
```
