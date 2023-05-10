// Run database
docker run --name postgres -e POSTGRES_PASSWORD=senha -e POSTGRES_DB=sales_basic -p 5432:5432 -d postgres