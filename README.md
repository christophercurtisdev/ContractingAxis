## Contracting axis
The point of this repo is to demonstrate complex data modelling consumed by an api utilising different laravel packages

### Models:
- Users
- Contracts
- Teams
- TeamRequests
- ContractRequests

### Relationships:
- User accepts many Contracts
- Contract belongs to one Users
- Contracts is accepted by many Users
- User belongs to many Teams
- Team has many Users
- User has one TeamRequest per Team
- User has one ContractRequest per Contract

The main packages used are laravel/passport laravel/socialite spatie/tags
