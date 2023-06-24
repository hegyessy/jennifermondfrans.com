FROM webdevops/php-apache-dev:8.1
RUN apt-get update && apt-get install -y git
RUN git clone --depth 1 https://github.com/hegyessy/jennifermondfrans.com.git /app
RUN chown -R application:application /app/
