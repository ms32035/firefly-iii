<?php
/**
 * firefly.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types=1);

/*
 * DO NOT EDIT THIS FILE. IT IS AUTO GENERATED.
 *
 * ANY OPTIONS IN THIS FILE YOU CAN SAFELY EDIT CAN BE FOUND IN THE USER INTERFACE OF FIRFELY III.
 */

return [
    'configuration'              => [
        'single_user_mode' => true,
        'is_demo_site'     => false,
    ],
    'encryption'                 => (is_null(env('USE_ENCRYPTION')) || env('USE_ENCRYPTION') === true),
    'version'                    => '4.6.7',
    'maxUploadSize'              => 15242880,
    'allowedMimes'               => ['image/png', 'image/jpeg', 'application/pdf'],
    'list_length'                => 10,
    'export_formats'             => [
        'csv' => 'FireflyIII\Export\Exporter\CsvExporter',
    ],
    'import_formats'             => [
        'csv' => 'FireflyIII\Import\Configurator\CsvConfigurator',
    ],
    'import_configurators'       => [
        'csv' => 'FireflyIII\Import\Configurator\CsvConfigurator',
    ],
    'import_processors'          => [
        'csv' => 'FireflyIII\Import\FileProcessor\CsvProcessor',
    ],
    'import_pre'                 => [
        'bunq' => 'FireflyIII\Support\Import\Prerequisites\BunqPrerequisites',
    ],
    'import_info'                => [
        'bunq' => 'FireflyIII\Support\Import\Information\BunqInformation',
    ],
    'import_transactions'        => [
        'bunq' => 'FireflyIII\Support\Import\Transactions\BunqTransactions',
    ],
    'bunq'                       => [
        'server' => 'https://sandbox.public.api.bunq.com',
    ],
    'default_export_format'      => 'csv',
    'default_import_format'      => 'csv',
    'bill_periods'               => ['weekly', 'monthly', 'quarterly', 'half-year', 'yearly'],
    'accountRoles'               => ['defaultAsset', 'sharedAsset', 'savingAsset', 'ccAsset',],
    'ccTypes'                    => [
        'monthlyFull' => 'Full payment every month',
    ],
    'range_to_repeat_freq'       => [
        '1D'     => 'weekly',
        '1W'     => 'weekly',
        '1M'     => 'monthly',
        '3M'     => 'quarterly',
        '6M'     => 'half-year',
        '1Y'     => 'yearly',
        'custom' => 'custom',
    ],
    'subTitlesByIdentifier'      =>
        [
            'asset'   => 'Asset accounts',
            'expense' => 'Expense accounts',
            'revenue' => 'Revenue accounts',
            'cash'    => 'Cash accounts',
        ],
    'subIconsByIdentifier'       =>
        [
            'asset'               => 'fa-money',
            'Asset account'       => 'fa-money',
            'Default account'     => 'fa-money',
            'Cash account'        => 'fa-money',
            'expense'             => 'fa-shopping-cart',
            'Expense account'     => 'fa-shopping-cart',
            'Beneficiary account' => 'fa-shopping-cart',
            'revenue'             => 'fa-download',
            'Revenue account'     => 'fa-download',
            'import'              => 'fa-download',
            'Import account'      => 'fa-download',
        ],
    'accountTypesByIdentifier'   =>
        [
            'asset'   => ['Default account', 'Asset account'],
            'expense' => ['Expense account', 'Beneficiary account'],
            'revenue' => ['Revenue account'],
            'import'  => ['Import account'],
        ],
    'accountTypeByIdentifier'    =>
        [
            'asset'   => 'Asset account',
            'expense' => 'Expense account',
            'revenue' => 'Revenue account',
            'opening' => 'Initial balance account',
            'initial' => 'Initial balance account',
            'import'  => 'Import account',
        ],
    'shortNamesByFullName'       =>
        [
            'Default account'     => 'asset',
            'Asset account'       => 'asset',
            'Import account'      => 'import',
            'Expense account'     => 'expense',
            'Beneficiary account' => 'expense',
            'Revenue account'     => 'revenue',
            'Cash account'        => 'cash',
        ],
    'languages'                  => [
        'de_DE' => ['name_locale' => 'Deutsch', 'name_english' => 'German', 'complete' => true],
        'en_US' => ['name_locale' => 'English', 'name_english' => 'English', 'complete' => true],
        'fr_FR' => ['name_locale' => 'Français', 'name_english' => 'French', 'complete' => true],
        'id_ID' => ['name_locale' => 'Indonesian', 'name_english' => 'Indonesian', 'complete' => false],
        'nl_NL' => ['name_locale' => 'Nederlands', 'name_english' => 'Dutch', 'complete' => true],
        'pl_PL' => ['name_locale' => 'Polski', 'name_english' => 'Polish ', 'complete' => false],
        'pt_BR' => ['name_locale' => 'Português do Brasil', 'name_english' => 'Portuguese (Brazil)', 'complete' => true],
        'ru_RU' => ['name_locale' => 'Русский', 'name_english' => 'Russian', 'complete' => false],
        'sl_SI' => ['name_locale' => 'Slovenščina', 'name_english' => 'Slovenian', 'complete' => false],
        'zh-TW' => ['name_locale' => '正體中文', 'name_english' => 'Chinese Traditional', 'complete' => false],
    ],
    'transactionTypesByWhat'     => [
        'expenses'   => ['Withdrawal'],
        'withdrawal' => ['Withdrawal'],
        'revenue'    => ['Deposit'],
        'deposit'    => ['Deposit'],
        'transfer'   => ['Transfer'],
        'transfers'  => ['Transfer'],
    ],
    'transactionIconsByWhat'     => [
        'expenses'   => 'fa-long-arrow-left',
        'withdrawal' => 'fa-long-arrow-left',
        'revenue'    => 'fa-long-arrow-right',
        'deposit'    => 'fa-long-arrow-right',
        'transfer'   => 'fa-exchange',
        'transfers'  => 'fa-exchange',

    ],
    'bindables'                  => [
        'account'           => 'FireflyIII\Models\Account',
        'attachment'        => 'FireflyIII\Models\Attachment',
        'bill'              => 'FireflyIII\Models\Bill',
        'budget'            => 'FireflyIII\Models\Budget',
        'category'          => 'FireflyIII\Models\Category',
        'transaction_type'  => 'FireflyIII\Models\TransactionType',
        'journalLink'       => \FireflyIII\Models\TransactionJournalLink::class,
        'currency'          => 'FireflyIII\Models\TransactionCurrency',
        'fromCurrencyCode'  => 'FireflyIII\Support\Binder\CurrencyCode',
        'toCurrencyCode'    => 'FireflyIII\Support\Binder\CurrencyCode',
        'limitrepetition'   => 'FireflyIII\Models\LimitRepetition',
        'budgetlimit'       => 'FireflyIII\Models\BudgetLimit',
        'piggyBank'         => 'FireflyIII\Models\PiggyBank',
        'tj'                => 'FireflyIII\Models\TransactionJournal',
        'unfinishedJournal' => 'FireflyIII\Support\Binder\UnfinishedJournal',
        'tag'               => 'FireflyIII\Models\Tag',
        'rule'              => 'FireflyIII\Models\Rule',
        'ruleGroup'         => 'FireflyIII\Models\RuleGroup',
        'jobKey'            => 'FireflyIII\Models\ExportJob',
        'importJob'         => 'FireflyIII\Models\ImportJob',
        'accountList'       => 'FireflyIII\Support\Binder\AccountList',
        'budgetList'        => 'FireflyIII\Support\Binder\BudgetList',
        'journalList'       => 'FireflyIII\Support\Binder\JournalList',
        'categoryList'      => 'FireflyIII\Support\Binder\CategoryList',
        'tagList'           => 'FireflyIII\Support\Binder\TagList',
        'start_date'        => 'FireflyIII\Support\Binder\Date',
        'end_date'          => 'FireflyIII\Support\Binder\Date',
        'date'              => 'FireflyIII\Support\Binder\Date',
    ],
    'rule-triggers'              => [
        'user_action'           => 'FireflyIII\TransactionRules\Triggers\UserAction',
        'from_account_starts'   => 'FireflyIII\TransactionRules\Triggers\FromAccountStarts',
        'from_account_ends'     => 'FireflyIII\TransactionRules\Triggers\FromAccountEnds',
        'from_account_is'       => 'FireflyIII\TransactionRules\Triggers\FromAccountIs',
        'from_account_contains' => 'FireflyIII\TransactionRules\Triggers\FromAccountContains',
        'to_account_starts'     => 'FireflyIII\TransactionRules\Triggers\ToAccountStarts',
        'to_account_ends'       => 'FireflyIII\TransactionRules\Triggers\ToAccountEnds',
        'to_account_is'         => 'FireflyIII\TransactionRules\Triggers\ToAccountIs',
        'to_account_contains'   => 'FireflyIII\TransactionRules\Triggers\ToAccountContains',
        'amount_less'           => 'FireflyIII\TransactionRules\Triggers\AmountLess',
        'amount_exactly'        => 'FireflyIII\TransactionRules\Triggers\AmountExactly',
        'amount_more'           => 'FireflyIII\TransactionRules\Triggers\AmountMore',
        'description_starts'    => 'FireflyIII\TransactionRules\Triggers\DescriptionStarts',
        'description_ends'      => 'FireflyIII\TransactionRules\Triggers\DescriptionEnds',
        'description_contains'  => 'FireflyIII\TransactionRules\Triggers\DescriptionContains',
        'description_is'        => 'FireflyIII\TransactionRules\Triggers\DescriptionIs',
        'transaction_type'      => 'FireflyIII\TransactionRules\Triggers\TransactionType',
        'category_is'           => 'FireflyIII\TransactionRules\Triggers\CategoryIs',
        'budget_is'             => 'FireflyIII\TransactionRules\Triggers\BudgetIs',
        'tag_is'                => 'FireflyIII\TransactionRules\Triggers\TagIs',
        'has_attachments'       => 'FireflyIII\TransactionRules\Triggers\HasAttachment',
        'has_no_category'       => 'FireflyIII\TransactionRules\Triggers\HasNoCategory',
        'has_any_category'      => 'FireflyIII\TransactionRules\Triggers\HasAnyCategory',
        'has_no_budget'         => 'FireflyIII\TransactionRules\Triggers\HasNoBudget',
        'has_any_budget'        => 'FireflyIII\TransactionRules\Triggers\HasAnyBudget',
        'has_no_tag'            => 'FireflyIII\TransactionRules\Triggers\HasNoTag',
        'has_any_tag'           => 'FireflyIII\TransactionRules\Triggers\HasAnyTag',
        'notes_contain'         => 'FireflyIII\TransactionRules\Triggers\NotesContain',
        'notes_start'           => 'FireflyIII\TransactionRules\Triggers\NotesStart',
        'notes_end'             => 'FireflyIII\TransactionRules\Triggers\NotesEnd',
        'notes_are'             => 'FireflyIII\TransactionRules\Triggers\NotesAre',
        'no_notes'              => 'FireflyIII\TransactionRules\Triggers\NotesEmpty',
        'any_notes'             => 'FireflyIII\TransactionRules\Triggers\NotesAny',
    ],
    'rule-actions'               => [
        'set_category'            => 'FireflyIII\TransactionRules\Actions\SetCategory',
        'clear_category'          => 'FireflyIII\TransactionRules\Actions\ClearCategory',
        'set_budget'              => 'FireflyIII\TransactionRules\Actions\SetBudget',
        'clear_budget'            => 'FireflyIII\TransactionRules\Actions\ClearBudget',
        'add_tag'                 => 'FireflyIII\TransactionRules\Actions\AddTag',
        'remove_tag'              => 'FireflyIII\TransactionRules\Actions\RemoveTag',
        'remove_all_tags'         => 'FireflyIII\TransactionRules\Actions\RemoveAllTags',
        'set_description'         => 'FireflyIII\TransactionRules\Actions\SetDescription',
        'append_description'      => 'FireflyIII\TransactionRules\Actions\AppendDescription',
        'prepend_description'     => 'FireflyIII\TransactionRules\Actions\PrependDescription',
        'set_source_account'      => 'FireflyIII\TransactionRules\Actions\SetSourceAccount',
        'set_destination_account' => 'FireflyIII\TransactionRules\Actions\SetDestinationAccount',
        'set_notes'               => 'FireflyIII\TransactionRules\Actions\SetNotes',
        'append_notes'            => 'FireflyIII\TransactionRules\Actions\AppendNotes',
        'prepend_notes'           => 'FireflyIII\TransactionRules\Actions\PrependNotes',
        'clear_notes'             => 'FireflyIII\TransactionRules\Actions\ClearNotes',
    ],
    'rule-actions-text'          => [
        'set_category',
        'set_budget',
        'add_tag',
        'remove_tag',
        'set_description',
        'append_description',
        'prepend_description',
    ],
    'test-triggers'              => [
        'limit' => 10,
        'range' => 200,
    ],
    'default_currency'           => 'EUR',
    'default_language'           => 'en_US',
    'search_modifiers'           => ['amount_is', 'amount', 'amount_max', 'amount_min', 'amount_less', 'amount_more', 'source', 'destination', 'category',
                                     'budget', 'bill', 'type', 'date', 'date_before', 'date_after', 'on', 'before', 'after'],
    // tag notes has_attachments
    'currency_exchange_services' => [
        'fixerio' => 'FireflyIII\Services\Currency\FixerIO',
    ],
    'preferred_exchange_service' => 'fixerio',

];
