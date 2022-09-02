FROM laravelphp/vapor:php81

RUN apk --update add ffmpeg

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions gd exif

COPY . /var/task
