<template>

    <div class="container">

        <h1>HALCON</h1>

        <h2>Track Your Order</h2>

        <p>
            Enter your Customer Number and Invoice Number to check your order status.
        </p>

        <div>

            <label>Customer Number</label>

            <br>

            <input
                v-model="customerNumber"
                type="text"
            >

            <br><br>

            <label>Invoice Number</label>

            <br>

            <input
                v-model="invoiceNumber"
                type="text"
            >

            <br><br>

            <button @click="searchOrder">
                Check Order Status
            </button>

            <button
                @click="clearSearch"
                class="clear-btn"
            >
                Clear Search
            </button>

        </div>

        <div v-if="foundOrder" class="order-box">

            <h3>Order Information</h3>

            <p>
                <strong>Customer:</strong>
                {{ foundOrder.customer }}
            </p>

            <p>
                <strong>Invoice:</strong>
                {{ foundOrder.invoice }}
            </p>

            <p>
                <strong>Status:</strong>
                {{ foundOrder.status }}
            </p>

        </div>

        <div v-if="notFound" class="error-box">

            Order not found.

        </div>

    </div>

</template>

<script>

export default {

    data() {

        return {

            customerNumber: '',
            invoiceNumber: '',

            foundOrder: null,

            notFound: false,

            orders: [

                {
                    customerNumber: 'CUST001',
                    invoice: 'INV001',
                    customer: 'Juan Perez',
                    status: 'Delivered'
                },

                {
                    customerNumber: 'CUST002',
                    invoice: 'INV002',
                    customer: 'Maria Garcia',
                    status: 'In Transit'
                },

                {
                    customerNumber: 'CUST003',
                    invoice: 'INV003',
                    customer: 'Carlos Lopez',
                    status: 'Processing'
                }

            ]

        };

    },

    methods: {

        searchOrder() {

            const result = this.orders.find(order =>

                order.customerNumber === this.customerNumber &&
                order.invoice === this.invoiceNumber

            );

            if (result) {

                this.foundOrder = result;
                this.notFound = false;

            } else {

                this.foundOrder = null;
                this.notFound = true;

            }

        },

        clearSearch() {

            this.customerNumber = '';
            this.invoiceNumber = '';

            this.foundOrder = null;
            this.notFound = false;

        }

    }

}

</script>

<style>

body{
    margin:0;
    background:#f4f7f6;
    font-family:Arial, Helvetica, sans-serif;
}

.container{
    max-width:800px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 0 15px rgba(0,0,0,.1);
}

h1{
    color:#13352a;
    text-align:center;
    margin-bottom:10px;
}

h2{
    text-align:center;
    margin-bottom:25px;
}

label{
    font-weight:bold;
}

input{
    width:100%;
    padding:12px;
    margin-top:5px;
    border:1px solid #ccc;
    border-radius:6px;
}

button{
    width:100%;
    padding:12px;
    background:#13352a;
    color:white;
    border:none;
    border-radius:6px;
    cursor:pointer;
    font-weight:bold;
}

button:hover{
    background:#1f5543;
}

.clear-btn{
    margin-top:10px;
    background:#666;
}

.clear-btn:hover{
    background:#444;
}

.order-box{
    margin-top:25px;
    padding:20px;
    background:#eef6f3;
    border-left:5px solid #13352a;
}

.error-box{
    margin-top:25px;
    padding:15px;
    background:#ffecec;
    color:red;
    border-left:5px solid red;
}

</style>