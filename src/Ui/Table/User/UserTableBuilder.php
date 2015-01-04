<?php namespace Anomaly\UsersModule\Ui\Table\User;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class UserTableBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UsersModule\Ui
 */
class UserTableBuilder extends TableBuilder
{

    /**
     * The table model.
     *
     * @var string
     */
    protected $model = 'Anomaly\UsersModule\User\UserModel';

    /**
     * The table views.
     *
     * @var string
     */
    protected $views = 'Anomaly\UsersModule\Ui\Table\User\Handler\ViewHandler@handle';

    /**
     * The table filters.
     *
     * @var string
     */
    protected $filters = 'Anomaly\UsersModule\Ui\Table\User\Handler\FilterHandler@handle';

    /**
     * The table columns.
     *
     * @var string
     */
    protected $columns = 'Anomaly\UsersModule\Ui\Table\User\Handler\ColumnHandler@handle';

    /**
     * The table buttons.
     *
     * @var string
     */
    protected $buttons = 'Anomaly\UsersModule\Ui\Table\User\Handler\ButtonHandler@handle';
}