``empty``
=========

``empty`` checks if a variable is an empty string, an empty sequence, an empty
mapping, exactly ``false``, or exactly ``null``.

For objects that implement the ``Countable`` interface, ``empty`` will check the
return value of the ``count()`` method.

For objects that implement the ``__toString()`` magic method (and not ``Countable``),
it will check if an empty string is returned.

.. code-block:: twig

    {% if user is empty %}
        ...
    {% endif %}

