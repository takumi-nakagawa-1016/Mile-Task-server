# コンテナに入る
bash:
	docker-compose exec web bash

# マイグレーションファイルを作成
create-migration:
	docker-compose exec web bundle exec rails generate migration NAME=$(name)

# コントローラーを作成
create-controller:
	docker-compose exec web bundle exec rails generate controller NAME=$(name)

# モデルを作成
m:
	docker-compose exec web bundle exec rails generate model NAME=$(name)

# シーダーを作成
create-seeder:
	docker-compose exec web bundle exec rails generate seeder NAME=$(name)

seed: 
	docker-compose exec web bundle exec rails db:seed

migrate:
	docker-compose exec web bundle exec rails db:migrate
