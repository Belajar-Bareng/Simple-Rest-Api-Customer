CRUD Customer

Create
Read
Update
Delete

Create
- store customer's information
    - [POST] /api/customers
    - Body
    {
        "name": "Jeje",
        "phone": 01234
    }
Read
- list all customers
    - [GET] /api/customers
- detail customer
    - [GET] /api/customers/{id}
Update
- update current customer's information
    - [PUT] /api/customers/{id}
    - Body
    {
        "name": "Jeje",
        "phone": 01234
    }
Delete
- delete current customer's information
    - [DELETE] /api/customers/{id}

