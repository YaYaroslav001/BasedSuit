const { Sequelize, DataTypes } = require('sequilize');

module.exports = function(sequilize) {
	return sequilize.define('user', {
		id: {type: DataType.INTEGER, primaryKey: true, autoIncrement: true},
		email: {type: DataType.STRING, primaryKey: false, required: true},
		password: {type: DataType.STRING, primaryKey: false, required: true},
		phone_number: {type: DataType.STRING, primaryKey: false, required: true}
	})
}

const order = await db.order.create({ userID, date })

for (let i = 0; i < product.length; i++) {
	const prod = await db.prod.create({ productID: product[i].id, orderId: order.id })
}