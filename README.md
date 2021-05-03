# Stress Testing

## Apache Bench
ab -c 200 -n 200000 -k http://127.0.0.1:9501/

# https://github.com/wg/wrk
wrk -t4 -c400 -d10s http://127.0.0.1:1337/



https://gist.github.com/nkt/e49289321c744155484c






docker run -it -v /home/cyc/dev/benchmark/:/home/cyc/dev/benchmark/ ubuntu bash
apt update
apt upgrade -y

apt install -y php php-fpm
apt install -y curl

curl -sL https://deb.nodesource.com/setup_current.x | bash -
apt install -y nodejs npm




## Install wrt: https://github.com/wg/wrk/wiki/Installing-Wrk-on-Linux
sudo apt-get install build-essential libssl-dev git -y
git clone https://github.com/wg/wrk.git wrk
cd wrk
make
sudo cp wrk /usr/local/bin

