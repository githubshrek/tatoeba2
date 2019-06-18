# Imouto

Imouto is a collection of automation scripts for installing an instance of [Tatoeba](https://tatoeba.org/) using [ansible](http://www.ansible.com/home).

## Requirements

Here are the basic requirements of the machine you’re using imouto from.

* GNU/Linux or MacOS
* Git
* Ansible 2.4 or later (also available on pip: `pip install ansible`)

## Use cases

Imouto can be used in different ways to install Tatoeba depending on your setup and needs. Whatever the way, you first need to:

- Install the basic requirements above
- Install the requirements for your use-case below
- Clone the repository and go to its directory:

```bash
git clone https://github.com/Tatoeba/imouto
cd imouto
```

From there, you may install Tatoeba:

- [On a local VM](#install-tatoeba-on-a-local-vm)
- [On a local machine](#install-tatoeba-on-a-local-machine)
- [On a remote machine](#install-tatoeba-on-a-remote-machine)

### Install Tatoeba on a local VM

This is the preferred way for developers to setup a local development environment. The additional requirements are:

* VirtualBox 4.0 or later, which can be installed with a package manager or with the help of [generic binaries](https://www.virtualbox.org/wiki/Downloads))
* Vagrant 1.7 or later

#### Usage Instructions

- Configure proxy on Vagrant VM if you are behind proxy server:
  - Install proxyconf plugin:

```bash
 vagrant plugin install vagrant-proxyconf
```

  - And then add the following to Vagrantfile:

```ruby
Vagrant.configure("2") do |config|
  if Vagrant.has_plugin?("vagrant-proxyconf")
    config.proxy.http     = "http://username:password@proxy_host:proxy_port"
    config.proxy.https    = "http://username:password@proxy_host:proxy_port"
    config.proxy.no_proxy = "localhost,127.0.0.1,.example.com"
  end
end
```

- Run this command to install everything. Please be patient, it takes a while for vagrant to download the ~300MB box on your machine and then to provision it using ansible.

```bash
vagrant up
```

- Once it completed, you should be able to:
  - Access your local instance of Tatoeba at http://localhost:8080/
  - Run `vagrant ssh` to ssh to the machine.
  - Use the script `mount.sh` (run it to get usage instructions) to mount any of the VM's directory on your host machine in order to modify files without ssh-ing to the VM. (Use 'vagrant' as the password if prompted after running `mount.sh`: `vagrant@127.0.0.1's password:`)

#### Post-provisioning tasks

You may want to perform certain tasks or steps independently without having to re-provision the whole machine again. To do that you can use the following command:

```bash
ansible-playbook -i .vagrant/provisioners/ansible/inventory/vagrant_ansible_inventory --private-key=~/.vagrant.d/insecure_private_key ansible/vagrant.yml --tag <tag>
```

where `<tag>` is one of the tags present in the list of task printed by the following command:

```bash
ansible-playbook --list-tasks ansible/vagrant.yml
```

You can also use `--skip-tag` to run all the tasks *but* one in particular. Since the command is too long and very difficult to remember, you can use the following commands to create an alias:

```bash
echo "alias imouto-provision='ansible-playbook -i .vagrant/provisioners/ansible/inventory/vagrant_ansible_inventory --private-key=~/.vagrant.d/insecure_private_key ansible/vagrant.yml'" >> ~/.bashrc
source ~/.bashrc
```

Now you can simply use the following command to run a particular step:

```bash
imouto-provision --tag external_tools
```

### Install Tatoeba on a local machine

This setup is for using Tatoeba on a dedicated machine. Please be aware that this will install many things all over the place and may mess up with existing applications like nginx, mysql etc. The additional requirements are:

* Debian Stretch
* sudo

Note that Debian Stretch only packages Ansible 2.2 whereas we need 2.4. You can follow [these instructions](https://docs.ansible.com/ansible/latest/installation_guide/intro_installation.html#latest-releases-via-apt-debian) to get Ansible 2.4 on your Debian Stretch machine.

#### Usage Instructions

- Move to the ansible directory

```sh
cd ansible
```

- Edit the file `host_vars/default` to set some variables according to your needs, such as:

```
code_dir: /home/johndoe/tatoeba/
git_rep: https://github.com/myfork/tatoeba2
```

- Install everything

```sh
ansible-playbook ./local.yml
```

### Install Tatoeba on a remote machine

TODO
