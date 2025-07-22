<?php 

    // Trait bana ke tu multiple classes me same function ka code reuse kar sakta hai without inheritance. ---traits---

    trait emailLogger {

        public function sendEmail($to, $subject){
            echo "Somthing email to $to with subject : $subject";
        }

    }

    class Order {
        use emailLogger;
    }

    class supportTicket {
        use emailLogger;
    }

    $order = new Order();
    $order->sendEmail("amit@gmail.com", "Order Confirmation <br>");

    $ticket = new supportTicket();
    $ticket->sendEmail("honey@gmail.com", "Support Ticket Recived")
?>