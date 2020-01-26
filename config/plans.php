<?php

return [

    /*
     * The model which handles the plans tables.
     */

    'models' => [

        'plan' => \Lakshmaji\Plans\Models\PlanModel::class,
        'subscription' => \Lakshmaji\Plans\Models\PlanSubscriptionModel::class,
        'feature' => \Lakshmaji\Plans\Models\PlanFeatureModel::class,
        'usage' => \Lakshmaji\Plans\Models\PlanSubscriptionUsageModel::class,

        'stripeCustomer' => \Lakshmaji\Plans\Models\StripeCustomerModel::class,

    ],

];
